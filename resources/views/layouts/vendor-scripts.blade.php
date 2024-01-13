<!-- JAVASCRIPT -->
<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
{{-- <script src="{{ URL::asset('assets/js/plugins.js') }}"></script> --}}
<div style="display: none">
<script>
  if (document.querySelectorAll("[toast-list]") || document.querySelectorAll('[data-choices]') || document.querySelectorAll("[data-provider]")) {
  document.writeln("<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'></script>");
  document.writeln("<script type='text/javascript' src='{{ URL::asset('assets/libs/choices.js/choices.min.js') }}'></script>");
  document.writeln("<script type='text/javascript' src='{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}'></script>");
}
</script>
</div>
@yield('scripts')
