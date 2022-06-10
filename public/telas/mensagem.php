<div class="alert alert-success fade show" role="alert">
  <strong><?php echo $mensagem; ?></strong>
</div>

<script>
  var alertList = document.querySelectorAll('.alert');
  alertList.forEach(function(alert) {
    new bootstrap.Alert(alert)
  })
</script>