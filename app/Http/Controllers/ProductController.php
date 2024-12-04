<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
 
        return view('products.index', compact('product'));

        // $product = new Product();
        // if ($request->search) {
        //     $products = $products->where('name', 'LIKE', "%{$request->search}%");
        // }
        // $products = $products->latest()->paginate(10);
        // if (request()->wantsJson()) {
        //     return Product::collection($products);
        // }
        // return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('products')->with('success', 'Product added successfully');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
 
        return view('products.show', compact('product'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
 
        return view('products.edit', compact('product'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
 
        $product->update($request->all());
 
        return redirect()->route('products')->with('success', 'product updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
 
        $product->delete();
 
        return redirect()->route('products')->with('success', 'product deleted successfully');
    }

            //     $value = $_POST['search'];

            // $sql = "SELECT * FROM t_students WHERE (s_last_name LIKE '%$value%' OR s_first_name LIKE '%$value%')";
            // $result = $conn->query($sql);

            // if ($result->num_rows > 0) {
            //     while ($row = $result->fetch_assoc()) {
                   /* 
                   
                   ?>
                    <tr>
                        <td style="text-align: center;">
                            <?= $row['s_student_id'] ?>
                        </td>
                        <td>
                            <?= $row['s_last_name'] ?>, <?= $row['s_first_name'] ?>
                        </td>
                        <td class="d-grid">
                            <button type="button" 
                            class="btn btn-sm btn-block btn-success" 
                            data-bs-toggle="modal"
                            data-bs-target="#view-details">
                                View
                            </button>
                        </td>
                    </tr>
                    <?php
                    
                    */
            //     }
            // } else {
            //     echo "0 results";
            // }
}
