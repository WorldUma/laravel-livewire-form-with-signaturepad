import './bootstrap';

// resources/js/app.js
import SignaturePad from 'signature_pad';

document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('signatureCanvas');
    if (canvas) {
        const signaturePad = new SignaturePad(canvas);

        // Listen to form submission
        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();
            const signatureData = signaturePad.toDataURL(); // Get signature data as base64 string
            // Livewire.emit('saveSignature', signatureData); // Emit an event to Livewire component
            //Livewire.find('counter').set('signature', signatureData);
            console.log(signatureData);
            Livewire.find('saveSignature', signatureData)
            //Livewire.emit('saveSignature', signatureData);
            //Livewire.component('counter').call('saveSignature', signatureData);
        });
    }
});


