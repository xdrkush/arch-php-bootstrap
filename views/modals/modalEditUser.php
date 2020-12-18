<!-- Modal Edit -->
<div class="modal fade" id="modalEditUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content fetch-data">
     <!-- Content jquery -->
    </div>
  </div>
</div>
<!-- / Modal Edit -->

<!-- Script -->
<script>
    $(document).ready(function(event) {
        $('#modalEditUser').on('show.bs.modal', function(e) {
            var data = $(e.relatedTarget);
            var modal = $(this)
            console.log(data)
            var body = `
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sur de vouloir éditer ${data.data('name')} ?</p>
                    <form action="./controller/user/update.php?id=${data.data('id')}" method='post'>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" name='name' value="${data.data('name')}" class="form-control fetch-name" id="recipient-name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">Email (user@domain.ex):</label>
                            <input type="text" name='email' value="${data.data('email')}" class="form-control fetch-email" id="recipient-name">
                        </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="recipient-name" class="col-form-label">Mobile:</label>
                            <input type="text" name='mobile' value="${data.data('mobile')}" class="form-control fetch-mobile">
                        </div>
                        <div>
                            <button class='btn btn-primary' type='submit'>Envoyer</button>
                        </div>
                    </form>
                </div>
            `
            modal.find('.fetch-data').html(body)
        });
    });
</script>
<!-- / Script -->
