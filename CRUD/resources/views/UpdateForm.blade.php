<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Update Form</h2>
  <form action="{{url('updateContact',$updateData->id)}}" method='post'>
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Name :</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$updateData->Name}}">
    </div>

    <div class="mb-3 mt-3">
      <label for="phone">Phone No :</label>
      <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" pattern="[6-9][0-9]{9}" maxlength="10" value="{{$updateData->Phone}}">
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$updateData->Email}}">
    </div>

    <div class="mb-3">
      <label for="address">Address :</label>
      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{$updateData->Address}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
