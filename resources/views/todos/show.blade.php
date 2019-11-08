<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todo Item</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center my-5">{{ $todo->name }}</h1>
      <div class="row justify-content-center"> 
        <div class="col-md-8">      
          <div class="card card-default">
            <div class="card-header">
                Details
            </div>        
            <div class="card-body">
              {{ $todo->description }}
            </div>
          </div>
        </div> 
      </div><!-- row -->  
    </div><!-- container -->
  </body>
</html>