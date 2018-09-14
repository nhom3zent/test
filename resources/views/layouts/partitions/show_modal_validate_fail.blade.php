<script>
    let hasError    = '{{ $errors->any() }}';
    let modalTarget = '{{ Session::get('modal_target') }}';

    let app = new Application();
    app.showModalValidateFail(hasError, modalTarget);
</script>