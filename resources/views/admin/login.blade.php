<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TL - Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="height: 100vh; background-color: #8eaeba;">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh; background-color: #8eaeba;">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <img src="{{ asset('images/signature4.png') }}" alt="TL Logo" class="mb-4"
                                style="width: 200px;">
                        </div>
                        <form action="{{ route('signin') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control rounded-lg" id="email" name="email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-lg" id="password" name="password"
                                    required>
                            </div>
                            <div class="w-full d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary rounded-lg w-30">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
