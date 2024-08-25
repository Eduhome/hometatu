<!-- resources/views/device_controls/modals/create_controls.blade.php -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Crear variable</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="deviceControlForm">
          @csrf
          <input type="hidden" id="device_id" value="">
          <div class="row mb-3">
            <div class="col">
              <label for="deviceName" class="form-label">Nombre de la variable</label>
              <input type="text" id="deviceName" class="form-control" placeholder="Nombre de la variable" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="control_type" class="form-label">Tipo de control</label>
              <select id="control_type" class="form-select" required>
                <option value="float">Float</option>
                <option value="boolean">Boolean</option>
                <option value="character">Character</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="permissions" class="form-label">Permisos</label>
              <select id="permissions" class="form-select" required>
                <option value="read-write">Read-Write</option>
                <option value="read-only">Read-Only</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="update_policy" class="form-label">Política de actualización</label>
              <select id="update_policy" class="form-select" required>
                <option value="on-change">On-Change</option>
                <option value="periodically">Periodically</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submitDevice">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
  document.getElementById('submitDevice').addEventListener('click', function() {
    const deviceNameElement = document.getElementById('deviceName');
    const controlTypeElement = document.getElementById('control_type');
    const permissionsElement = document.getElementById('permissions');
    const updatePolicyElement = document.getElementById('update_policy');
    const deviceIdElement = document.getElementById('device_id');

    if (deviceNameElement && controlTypeElement && permissionsElement && updatePolicyElement && deviceIdElement) {
      const deviceName = deviceNameElement.value;
      const controlType = controlTypeElement.value;
      const permissions = permissionsElement.value;
      const updatePolicy = updatePolicyElement.value;
      const deviceId = deviceIdElement.value;

      const data = {
        name: deviceName,
        control_type: controlType,
        permissions: permissions,
        update_policy: updatePolicy,
        device_id: deviceId,
      };
      
      fetch('/device-controls', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(data)
      })
      .then(response => response.json())
      .then(data => {
        console.log('Success:', data);
        alert('Variable creada exitosamente.');
        $('#modalCenter').modal('hide'); // Cierra el modal
        window.location.reload(); // Recarga la página para mostrar los cambios
      })

      .catch((error) => {
        console.error('Error:', error);
        alert('Hubo un error al crear la variable.');
      });
    } else {
      console.error('One or more elements are missing.');
    }
  });
  </script>
