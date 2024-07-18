{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livwire - Demo </title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body>


    @livewire('counter')
    <script src="{{ asset('js/signature_pad.umd.min.js') }}"></script>
    @livewireScripts

    <script>
        document.addEventListener('livewire:load', function() {
            let canvas = document.getElementById('signatureCanvas');
            let signaturePad = new SignaturePad(canvas);
            console.log('signaturepad', signaturePad)

            Livewire.on('clearSignature', function() {
                signaturePad.clear();
            });

            Livewire.on('saveSignature', function() {
                let signatureData = signaturePad.toDataURL(); // Get the signature image data

                Livewire.emit('saveSignature', signatureData);
            });
        });
    </script>

</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire - Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    @livewire('counter')
    

    @livewireScripts

    @vite('resources/js/app.js')

</body>

</html>
