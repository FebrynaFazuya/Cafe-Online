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
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Update Makanan</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item"><a href="#">Components</a></div>
                        <div class="breadcrumb-item">Table</div>
                    </div>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Simple Table</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-header-form">


                                        <div style="position: relative; top: 60px; right: -150px">
                                            <form action="{{ url('/update', $data->id) }}" method="post"
                                                enctype="multipart/form-data">

                                                @csrf

                                                <form>

                                                    <div>
                                                        <label>Title</label>
                                                        <input style="color:black;" type="text" name="title"
                                                            value="{{ $data->title }}" required>
                                                    </div>

                                                    <div>
                                                        <label>Price</label>
                                                        <input style="color:black;" type="num" name="price"
                                                            value="{{ $data->price }}" required>
                                                    </div>



                                                    <div>
                                                        <label>Description</label>
                                                        <input style="color:black;" type="text" name="description"
                                                            value="{{ $data->description }}" required>
                                                    </div>

                                                    <div>
                                                        <label>old Image</label>
                                                        <img height="200" width="200"
                                                            src="/foodimage/{{ $data->image }}">
                                                    </div>

                                                    <div>
                                                        <label>new Image</label>
                                                        <input type="file" name="image" required>
                                                    </div>

                                                    <div>

                                                        <input style="color: blue" type="submit" value="Save">
                                                    </div>

                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('admin.adminscript')



</body>

</html>
