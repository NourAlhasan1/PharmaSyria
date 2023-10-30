<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>

  <style>
    #container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #FFFFFF;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
      padding: 20px;
      border-radius: 5px;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
    }
    #btn {
      background-color: #13073A; 
      color: #FFFFFF; 
      padding: 10px 20px; 
      margin:10px 0; 
      border: none; 
      border-radius: 5px;
    }
    #btn:hover {
      background-color: #FFFFFF; 
      color: #13073A;
      border:1px solid #13073A;
      cursor: pointer;
    }
    form {
      display: flex; 
      flex-direction: column; 
      align-items: center;
    }
    label {
      margin:10px 0px; 
      padding:10px;
    }
    #number-input{
      margin-bottom: 10px; 
      padding:5px; 
      text-align: center; 
      border: 1px solid;
      border-radius: 5px;
    }
  </style>


<div id="container">
  <form action="{{route('submitNumber')}}" method="post">
    <label for="number-input">لدواعي الأمان، فإن معرف النقابة الخاص بك مطلوب لإتمام عملية التسجيل.</label>
    @csrf
    <input type="number" id="number-input" name="number" min="1" required>
    <button type="submit" id="btn">تأكيد</button>
  </form>
</div> 


</body>
</html>





{{-- OLD --}}
{{-- 
    <div class="form-group mb-2">
      <h3> Enter Your Id</h3>
    </div>
    <form action="{{route('submitNumber')}}" method="post">
        @csrf
        <input type="number" name="number" id="number" class="form-control" ><br>
        <br>
        <button type="submit" class="btn btn-primary mb-2"  >Confirm identity</لا>
    </form> --}}
