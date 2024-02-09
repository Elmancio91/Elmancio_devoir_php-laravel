@extends()

@section()

<div class="container mt-5 col-4">
    <h3 class="text-center">Add Contact</h3>
    <form method="POST" action="{{ route('get-modification') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Avatar</label>
            <input type="file" name="avatar" class="form-control" id="exampleInputPassword">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Nom</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputPassword">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Phone Number</label>
            <input type="number" name="prenom" class="form-control" id="exampleInputPassword">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
            <input type="password" name="passwordconfirme" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">Modifi Now</button>
      </form>
</div>


@endsection
