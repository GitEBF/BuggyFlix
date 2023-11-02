@extends("layouts.app")

@section("contenu")
<style>
    .container {
        margin-top: 6rem;
        text-align: center;
    }

    .row {
        display: flex;
        justify-content: center;
    }

    .col-md-6 {
        width: 50%;
        max-width: 400px;
    }

    form {
        color: white;
        padding: 20px;
        border-radius: 5px;
    }

    .form-label {
        display: block;
        margin-bottom: 10px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .row .col-6 {
        width: 50%;
        padding: 0 10px;
    }

    .form-select {
        color: black;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .btn {
        background-color: #dc3545;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<section class="main-container flex justify-center">
    <div class="location" id="home">
        <div class="container mt-6">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <form method="post" action="{{ route('acteurs.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="input_gender" class="form-label">Gender</label>
                                <select class="form-select" name="input_gender">
                                    <option selected>Select a gender</option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    <option value="hog rider hog rider">hog rider hog rider</option>
                                    <option value="buggy">buggy</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="input_name" class="form-label">Birthday</label>
                                <input type="date" class="form-control" id="input_birthday" name="input_birthday">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection