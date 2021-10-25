{{--@include('sum::errors')--}}

<form action="{{route('validateForm')}}" method="post">
    @csrf
    @method('POST')
    <label for="number1">First Number:</label><br>
    <input type="text" id="number1" name="number1"><br><br>

    <label for="number2">Second Number:</label><br>
    <input type="text" id="number2" name="number2"><br><br>

    <button type="submit" class="btn btn-info">result</button>
</form>


