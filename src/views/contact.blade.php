<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <div class="w-full container mx-auto p-6">
        <h2 class="py-2 mx-auto text-center mt-4 mb-lg-5 uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">Contact us for more</h2>

        @if(session('contact_saved'))

            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-5" role="alert">
                <strong class="font-bold">Success! </strong>
                <span class="inline"> {{ session('contact_saved') }} </span>
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-5" role="alert">
                <strong class="font-bold">Alert! </strong>
            <span class="inline"> {{ $error }}</span>
            </div>
            @endforeach
        @endif

        {{-- <form action="" method="post">
            @csrf()
            <input type="text"
                name="name"
                placeholder="your name"
                class="@error('name') is-invalid @enderror"
            >
            <input type="email" name="email" placeholder="your email address" class="@error('email') is-invalid @enderror">
            <textarea name="message" id="" cols="30" rows="10" placeholder="message" class="@error('message') is-invalid @enderror"></textarea>
            <input type="submit" value="Submit"/>
        </form> --}}


        <form class="w-full max-w-lg mx-auto mt-5" action="" method="post">
            @csrf()
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="full_name">
                  Full Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="full_name"
                    name="name"
                    type="text"
                    placeholder="Taylor Otwell"
                >

              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                  Email
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 @error('email') border border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="email"
                    name="email"
                    required
                    type="email" placeholder="taylor@laravel.com"
                >
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                  Your Message
                </label>
                <textarea
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="message"
                    name="message"
                    rows="10"
                    cols="100"
                    required
                    placeholder="Your feedback message"></textarea>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <input
                        class="appearance-none block w-full bg-blue-600 rounded text-white border border-gray-200 rounded py-2 items-center px-2 leading-tight focus:outline-none focus:bg-blue-400 focus:border-gray-500 hover:bg-blue-700"
                        type="submit"
                        value="Submit"
                    />
                </div>

            </div>
          </form>
    </div>

</body>
</html>
