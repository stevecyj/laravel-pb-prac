
    @extends('layouts.app')

    @section('title', '哈哈')


    @section('sidebar')
    @parent
    <p>Laravel I am sidebar</p>

    @endsection

    @section('content')
    <p>I'm content...</p>
    @endsection
</body>
</html>
