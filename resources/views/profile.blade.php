



@extends('layout.master')

@section('layout.header')
<head>
    <title>Profile</title>
</head>
@endsection

@section('content')

    <link href="assets/css/profile.css" rel="stylesheet">
<body style="background-color: rgb(182, 210, 234)">
    <div class="container" style="height:1150px;">
    <div class="logo">
      <img src="{{asset("assets/img/logoweb262.png")}}" alt="" style="height: 30%; width:15%;">
    </div><br>
    <form action="/profile"  method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Upload Your Book</h1>
        <div class="box-big">
      
            <div class="box-left"> 
              
             <div class="box-letter"> 
              
                <!-- <form>
                    <label for="img">Upload Book Image</label> <br>
                    <input type="file" id="img" name="img" accept="image/*"> <br><br>
                    <button>Upload</button>
                  </form> -->
                  <label for="img">Upload Book Image</label> <br>
                    <input type="file" id="img" name="img"> <br><br>
            </div>
            </div>
            <div class="box-right">
                    <div class="row_name">
                        <h3>Book Name</h3>
                        <div class="grid">
                            <div>
                                <input type="text" placeholder="Book Title" name="name" style="width:10cm; height: 1cm; border-radius: 5px;"> <br>
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <h3>Author Name</h3>
                        <div style="margin-top: 10px;">
                            <input type="text" placeholder="Author name..." name="author_name" style="width:10cm; height: 1cm; border-radius: 5px;"> 
                        </div>
                    </div>
                        <div style="margin-top: 10px;">
                        <h5>Book Type</h5>
                            <select name="book_types" id="type">
                                <option value="Romance">Romance</option>
                                <option value="Comic">Comic</option>
                                <option value="Sci_fi">Sci-Fi</option>
                                <option value="Study">Study Book</option>
                                <option value="novel">Novel</option>
                                <option value="History">History</option>
                            </select>
                            <!-- <input type="text" placeholder="Author name..." name="book_types" style="width:10cm; height: 1cm; border-radius: 5px;"> -->
                        </div>
                    <div class="email">
                        <h3>E-mail</h3>
                        <div style="margin-top: 10px;">
                            <input type="text"placeholder="Email-address..." name="email" style="width:10cm; height: 1cm; border-radius: 5px;"> <br>
                            <label for="email">example@example.com</label>
                        </div>
                    </div>
                    <div class="mailingAddress">
                        <h3>Mailing Address</h3>
                        <div style="margin-top: 10px;">
                            <input type="text" placeholder="Where you live" name="mailing_address" style="width:10cm; height: 1cm; border-radius: 5px;" > <br>
                            <label for="mailing_address">Street Address</label>
                        </div>
                        <div class="cityAndState">
                            <div class="city">
                                <input type="text" name="city" style="width:4cm; height: 1cm; border-radius: 5px;">
                                <label for="city">City</label>
                                <input type="text" name="state_or_province" style="width:4cm; height: 1cm; border-radius: 5px;"> 
                                <label for="state_or_province">State/Province</label>
                            </div>
                        </div>
                        <div class="cityAndState">
                            <div class="city">
                                <input type="number" name="postalcode" style="width:4cm; height: 1cm; border-radius: 5px;" > <br>
                                <label for="postalcode">Postal/Zip Code</label>
                            </div>
                        </div>
                    </div>
                    <div class="productDescription">
                        <h4>Description Book you wish to Exchange</h4>
                        <input type="text" name="product_description" placeholder="Enter the description of your product" style="width:15cm; height: 5cm; border-radius: 5px;" ></input>
                    </div>
        
                    <br>
                    
                        <input type="submit" value="Submit">
                    
                </form>
            </div>
            
            </div>
  

        
    </div>

</body>
@endsection
