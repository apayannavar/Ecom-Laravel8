
@extends('master')

@section("content")
<div class="custom-product">
    <h2 class="seached-result-heading">Your Order</h2>
        <div class="col-sm-10">
            <table class="table">
                <thead>
                  <tr>
                    <th>Bill Details</th>
                    <th><span>&#8377;</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>AMOUNT</td>
                    <td><span>&#8377;</span>{{ $total }}</td>
                    </tr>
                  <tr>
                    <td>TAX</td>
                    <td><span>&#8377;</span>0</td>
                  </tr>
                  <tr>
                    <td>DELIVERY CHARGES</td>
                    <td><span>&#8377;</span>60</td>
                  </tr>
                  <tr>
                    <td class="total-amt-text">TOTAL AMOUNT</td>
                    <td class="total-amt-text"><span>&#8377;</span>{{ $total + 60 }}</td>
                  </tr>
                </tbody>
              </table>

              <h2 class="seached-result-heading">Address Details</h2>
 

              <div>
                <form action="/action_page.php">
                    <div class="form-group">
                     <label for="pwd">Your Address:</label><br>
                      <textarea type="email" placeholder="Enter your Address" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Payment Method:</label><br>
                      <input type="radio" name="payment"><span>Cash On Delivery</span><br>
                      <input type="radio" name="payment"><span>Google Pay</span><br>
                      <input type="radio" name="payment"><span>PayTm</span><br>
                      <input type="radio" name="payment"><span>Bitcoin</span>
                    </div>
                    <button type="submit" class="btn btn-success">Pace My Order >>></button>
                  </form>
              </div>
            
        </div>
</div>
@endsection