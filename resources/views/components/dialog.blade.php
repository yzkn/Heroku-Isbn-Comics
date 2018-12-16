<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ e($title) }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>{{ e($message) }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">OK</button>
      </div>
    </div>
  </div>
</div>