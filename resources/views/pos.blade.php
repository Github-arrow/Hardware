@extends('layouts.app')
 
@section('title', '(Point-of-Sale) POS Register')
 
@section('contents')
    <hr>
    <div class="row">
      <div class="col-sm-8">
        <caption> 
          Add Product 
        </caption>
          <form class="form-horizontal" id="fromInvoice">+
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                  <tr>
                    <th class="text-center">Product Code</th>
                    <th class="text-center">Product Name</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Option</th>
                  </tr>
                </thead>
              <tr>
                <td>
                  <input type="text" class="form-control" placeholder="Product Code" name="Product_code" size="25px" required>
                </td>
                <td>
                  <input type="text" class="form-control" placeholder="Product Name" name="Product_name" size="25px" disabled>
                </td>
                <td>
                  <input type="integer" class="form-control" placeholder="Quantity" name="quantity" size="25px">
                </td>
                <td>
                  <input type="decimal" class="form-control" placeholder="Amount" name="Amount" size="25px" disabled>
                </td>
                <td>
                  <button class="btn btn-primary" type="buttom" onclick="addproduct()">Add</button>
                </td>
              </tr>
            </table>
        </form>
        <hr>
        <table class="table table-bordered" id="product-list">
          <thead>
            <tr>
              <th style="width: 40px">remove</th>
              <th>Product Code</th>
              <th>Product Name</th>
              <th>Unit Price</th>
              <th>Quantity</th>
    
              <th>Amount</th>
            </tr>
          </thead>
        </table>
      </div>

      <div class="col-sm-4">
        <div class="col s12 m6 offset-m4">
          <div class="form-group" align="left">
            <label class="form-label">Total</label>
            <input type="text" class="form-control" placeholder="Total" id="total" size="30px" required>
          </div>
          <div class="form-group" align="left">
            <label class="form-label">Pay</label>
            <input type="text" class="form-control" placeholder="Pay" id="pay" size="30px" required>
          </div>
          <div class="form-group" align="left">
            <label class="form-label">Change</label>
            <input type="text" class="form-control" placeholder="Balance" id="balance" size="30px" required>
          </div>

          <div class="form-group" align="left">
            <label class="col-sm-4 control-label">Payment</label>
            <select class="form-control" name="payment" id="payment" placeholder="Status" required>
              <option value="">Please Select</option>
              <option value="1">Cash</option>
              <option value="2">Card</option>
              <option value="3">Cheque</option>
          </select>
          </div>
          <hr>
          <br>
          <div class="" align="center">
            <button type="button" id="save" class="btn btn-primary mb-1" onclick="addProject()">Create Invoice</button>
            <button type="button" id="clear" class="btn btn-secondary mb-1" onclick="reSet()">Reset Invoice</button>
            <button type="button" id="clear" class="btn btn-warning mb-1" onclick="addnew()">Save Invoice</button>
          </div>
        </div>
      </div>
    </div>
    
@endsection