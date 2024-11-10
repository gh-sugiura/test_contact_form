<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function index()
    {
        return view("index");
    }


    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
            "first_name",
            "last_name",
            "gender",
            "email",
            "tell",
            "tell1",
            "tell2",
            "tell3",
            "address",
            "building",
            "category_id",
            "detail",
        ]);
        return view("confirm", compact("contact"));
    }


    public function thanks(Request $request)
    {
        if ($request->input("back") == "back") {
            return redirect("/")->withInput();
        }
        
        $contact = $request->only([
            "first_name",
            "last_name",
            "gender",
            "email",
            "tell",
            "address",
            "building",
            "category_id",
            "detail",
        ]);
        Contact::create($contact);
        return view("thanks");
    }


    public function admin(Request $request)
    {
        if ($request["button"] == "search") {
            $query = Contact::query();
            if (!empty($request["name"])) {
                $query->Where(DB::raw("concat(last_name,first_name)"), "LIKE", "%{$request["name"]}%");       
            }
            if (!empty($request["gender"])) {
                $query->where("gender", "LIKE", "%{$request["gender"]}%");
            }
            if (!empty($request["category"])) {
                $query->where("category_id", "LIKE", "%{$request["category"]}%");
            }
            if (!empty($request["date"])) {
                $query->where("created_at", "LIKE", "%{$request["date"]}%");
            }
            $contacts = $query->paginate(7);
            $categories = Category::all();
            return view("admin", compact("contacts", "categories"));
        } else {
            $contacts = Contact::with("category")->get();
            $contacts = Contact::Paginate(7);
            $categories = Category::all();
            return view("admin", compact("contacts", "categories"));
        }
    }


    public function csvExport(Request $request){
        $query = Contact::query();
        if (!empty($request["name"])) {
            $query->where(DB::raw("concat(last_name, first_name)"), "LIKE", "%{$request["name"]}%");
        }
        if (!empty($request["gender"])) {
            $query->where("gender", "LIKE", "%{$request["gender"]}%");
        }
        if (!empty($request["category"])) {
            $query->where("category_id", "LIKE", "%{$request["category"]}%");
        }
        if (!empty($request["date"])) {
            $query->where("created_at", "LIKE", "%{$request["date"]}%");
        }
        $contacts = $query->get();
        // $contacts = Contact::all();
        // $contacts = Contact::select(
        //     "category_id",
        //     "first_name",
        //     "last_name",
        //     "gender",
        //     "email",
        //     "created_at",
        //     )
        //     ->get();
        $csv_header = [
            "id",
            "category_id",
            "first_name",
            "last_name",
            "gender",
            "email",
            "tell",
            "address",
            "building",
            "detail",
            "created_at",
            "updated_at",
        ];
        $csv_data = $contacts->toArray();

        $response = new StreamedResponse(function () use ($csv_header, $csv_data) {
                $csv_export = fopen("php://output", "w");
                fwrite($csv_export, "\xEF\xBB\xBF");
                fputcsv($csv_export, $csv_header);
                foreach ($csv_data as $row) {
                    fputcsv($csv_export, $row);
                }
                fclose($csv_export);
        },200,[
            "Content-Type" => "text/csv_export",
            "Content-Disposition" => "attachment; filename = export_form_data.csv",
        ]);

        return $response;
    }


    public function modal()
    {
        return view("modal");
    }


    public function modalJs(Request $request)
    {
        $contacts= Contact::where("id",$request["id"])->get();
        return view("modal_js",compact("contacts"));
    }
}
