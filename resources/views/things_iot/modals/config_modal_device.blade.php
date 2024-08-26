{{-- modal para la creacion de dispositivos --}}
<div class="modal-onboarding modal fade animate__animated" id="onboardHorizontalImageModal" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content text-center">
      <div class="modal-header">
        <a class="text-muted close-label" href="javascript:void(0);" data-bs-dismiss="modal">Skip Intro</a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="customer-info text-center">
        <h4 class="mb-1">{{ $thingIot->id }}</h4>
        <p>Key URL: {{ $thingIot->key_url }}</p>
        <p>User ID: {{ $thingIot->user_id }}</p>
      </div>
      <div class="modal-body onboarding-horizontal p-0">
        <div class="onboarding-media">
          <img src="{{ asset('assets/img/illustrations/girl-doing-yoga-dark.png') }}" alt="girl-doing-yoga-dark" width="273" class="img-fluid" data-app-light-img="{{ asset('assets/img/illustrations/boy-verify-email-light.png') }}" data-app-dark-img="{{ asset('assets/img/illustrations/boy-verify-email-dark.png') }}">
        </div>
        <div class="onboarding-content mb-0">
          <h4 class="onboarding-title text-body">Configurar dispositivos</h4>
          <div class="onboarding-info">In this example you can see a form where you can request some additional
            information from the customer when they land on the app page.</div>
          <form id="deviceForm">
            @csrf <!-- Agrega el token CSRF aquí -->
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label for="nameEx7" class="form-label">Nombre del dispositivo</label>
                  <input class="form-control" placeholder="Nombre del dispositivo" type="text" id="deviceName" name="name">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submitDevice">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById('submitDevice').addEventListener('click', function() {
  const deviceName = document.getElementById('deviceName').value;
  const thingIotId = {{ $thingIot->id }};
  const userId = {{ $thingIot->user_id }};
  const data = {
    name: deviceName,
    thing_iot_id: thingIotId,
    user_id: userId,
  };

  fetch('{{ url('/devices') }}', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}' // Asegura que el token CSRF sea enviado correctamente
    },
    body: JSON.stringify(data)
  })
  .then(response => response.json())
  .then(data => {
    console.log('Success:', data);
    alert('Device created with secret key: ' + data.secret_key);
    window.location.reload();
  })
  .catch((error) => {
    console.error('Error:', error);
  });
});
</script>
