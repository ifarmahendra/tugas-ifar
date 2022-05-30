<!DOCTYPE html>
<html lang="en">

<p>nyoba edit</p>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman User</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset ('assets2/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets2/vendor/jquery-ui/jquery-ui.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset ('assets2/css/style.css') }}">
</head>


<body>

    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {!!session('success')!!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {!!session('error')!!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <div class="signup-content">
                    <form action="{{route('forminput.store')}}" method="POST" id="signup-form" class="signup-form">
                    @csrf
                        <div class="form-group">
                            <label for="first_name">E-mail</label>
                            <input type="text" class="form-input" name="email" id="first_name" />
                        </div>
                        <div class="form-group">
                            <label for="first_name">Nama Mahasiswa</label>
                            <input type="text" class="form-input" name="nama" id="first_name" />
                        </div>
                        <div class="form-group">
                            <label for="first_name">NIM</label>
                            <input type="text" class="form-input" name="nim" id="first_name" />
                        </div>
                        <div class="form-group">
                            <label for="first_name">Golongan</label>
                            <input type="text" class="form-input" name="golongan" id="first_name" />
                        </div>
                        <div class="form-group">
                            <label for="first_name">Mata Kuliah</label>
                            @foreach($learning as $lr )
                            <input type="text" class="form-input" name="matkul_id" value="{{ $learningclass::where('id',$lr->matkul_Id)->first()->mata_kuliah }}" id="first_name"  readonly>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="first_name">Tanggal Perkuliahan</label>
                            <input type="datetime-local" class="form-input" name="tanggal" id="first_name" />
                        </div>
                        <div class="form-group">
                            <label for="first_name">Soal</label>
                            @foreach($learning as $lr )
                            <textarea name="soal_id" id="soal_id" cols="75" rows="10" readonly >{{$lr->soal}}</textarea>
                            @endforeach
                        </div>
                        <div class="form-group form-group-textarea mb-md-0">
                            <label for="first_name">Jawaban</label>
                            <textarea type="text" class="form-control" aria-label="With textarea" name="jawaban" id="first_name" cols="75" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset ('assets2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('assets2/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset ('assets2/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset ('assets2/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset ('assets2/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
