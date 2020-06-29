
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO-do's list</title>
    <style>
        .container{
            margin: 30px;
        }
        .btn-submit {
            background: blueviolet;
            border: aliceblue;
            height: 29px;
            width: 88px;
            border-radius: 4px;
        }
        .input-st{
            height: 25px;
            width: 200px;
        }
        .container3{
            color: darksalmon;
            display: inline;
        }

        .container4{
            color: seagreen;
            display: inline;
        }


        .a-row1{
            display: none;
            margin-left: 80%;}

        .done-btn{
            color: seagreen;
        }
        .delete-btn{
            color: darkred;
        }

        .row1:hover .a-row1{display: inline; text-decoration:underline;}

        .row1:hover  .new1{ border: 1.5px solid;}



    </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="container">
<h1>To-do's List</h1>
<form method="post" action="{{url('/todolist/add')}}">
    @csrf
    <input class="input-st" type="text" name="name" placeholder="New task....">
    <button class="btn-submit" type="submit">Add To list</button>

</form>
</div>
<div class="container2">
    <ul style="list-style-type: none;" class="ul-tab">
       @foreach($items as $item)
          <div class="row1">
        <li class='@if($item->complete == 0 ) container3 @else container4 @endif'>{{$item->name}} </li>

       <div class='a-row1'>
           @if($item->complete == 0)

           <a href='{{url('/todolist/complete/'.$item->id)}}' class="done-btn">Mark as Done |</a>
           <a href="{{url('/todolist/delete/'.$item->id)}}" class="delete-btn">Delete</a>

           @endif
       </div>

        <hr class="new1">

    </div>
    
            @endforeach
    </ul>

</div>

<script>

        $(document).on("click",'.delete-btn',function () {
            $(this).parent().parent().empty()             //عند تحميل الصفحة يتم اعطاء خاصيتين للقائمة الجديدة

        });

        $(document).on("click",'.done-btn',function () {
            $(this).parent().parent().children('li').css({'color':'green'});
            $(this).parent().empty()
        });




</script>


</body>
</html>