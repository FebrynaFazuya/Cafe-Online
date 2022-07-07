{{-- <x-app-layout>

</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')
        <div style="position: relative; top: 60px; right: -150px">
            <form action="{{ url('/chefupdate', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <form>
                    <div>
                        <label>Nama</label>
                        <input style="color:black;" type="text" name="name" value="{{ $data->name }}" required>
                    </div>
                    <br>
                    <div>
                        <label>Speciality</label>
                        <input style="color:black;" type="num" name="specialist" value="{{ $data->specialist }}"
                            required>
                    </div>
                    <br>
                    <div>
                        <label>Old Image</label>
                        <img height="350" width="200" src="/chefimage/{{ $data->image }}">
                    </div>
                    <br>
                    <div>
                        <label>New Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <br>
                    <div>
                        <input class="btn btn-primary" type="submit" value="save">
                    </div>

                </form>

        </div>
    </div>

    @include('admin.adminscript')



</body>

</html>
