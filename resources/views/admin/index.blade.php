<!doctype html>
<html lang="en">

<head>
    <!----Title of the website-->
    <title>Dashboard</title>

    <meta name="description" content='soft legend for web solutions'>
    <meta name='tagename' content='programming,design,web design,android,web development,soft legend'>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<style>
.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>
<!------ Include the above in your HEAD tag ---------->

</head>
    <body>

<div class="container text-center">

<button class="mt-5"><a class="btn btn-danger" href="{{route('admin.logout')}}">Logout</a> </button>

    <div class="row col-md-6 col-md-offset-2 custyle py-5">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Desc</th>
            <th>Date</th>
        </tr>
    </thead>
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->desc}}</td>
                <td>{{$contact->created_at}}</td>
            </tr>
            @endforeach
         </table>
    </div>
</div>



        <!-----Jquery CDN--------->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
        
    </body>

</html>