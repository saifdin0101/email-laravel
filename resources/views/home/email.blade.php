
@extends('layouts.index')
@section('content')
<form action="store/email"  method="post" class="h-[100vh] w-[100vw] flex justify-center items-center flex-col gap-10">
    @csrf
    <h1 class="text-5xl font-thin">Email</h1>
    <div class="h-[70%] w-[80%] border-solid border-black border-[1px]  flex justify-center items-center flex-col gap-10">
        <div class="flex  gap-10 ">
            <div>
                <label class="font-thin" for="">Name : </label>
                <input class="pl-5 border-solid border-black border-[1px] h-[50px] w-[500px] rounded-sm"  name="name" placeholder="Type Your Name" type="text">
            </div>
            <div>
                <label class="font-thin" for="">Email : </label>
                <input class="pl-5 border-solid border-black border-[1px] h-[50px] w-[500px] rounded-sm" name="email" placeholder="Type Your Email" type="text">
            </div>
        </div>
        <div>
            <label class="font-thin" for="">Subject : </label>
            <input class="pl-5 border-solid border-black border-[1px] h-[150px] w-[71vw] rounded-sm" name="subject" placeholder="Type Your Subject" type="text">
        </div>
        <div>
            <label class="font-thin" for="">Rate : </label>
            <input class="h-[50px] border-solid border-black border-[1px] pl-1 w-[50px] rounded-full" min="0" max="5" step="1" name="rate" placeholder="Rate" type="number">
        </div>
        <button class="h-[50px] border-solid border-black border-[1px] w-[200px] rounded-[20px] " type="submit">submit</button>

        
    </div>
</form>
    
@endsection