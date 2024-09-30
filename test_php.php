<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/awesomplete/1.1.5/awesomplete.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/awesomplete/1.1.5/awesomplete.min.js"></script>
</head>

<form action="/submit-form" method="POST">
    @csrf
    <label for="search">Choose a fruit:</label>
    <input class="awesomplete" id="search" name="search" data-list="Apple, Banana, Cherry, Date, Grapes" autocomplete="off">

    <button type="submit">Submit</button>
</form>
