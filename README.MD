# Silverstripe Bootstrap 5 Forms

Adds (mostly) CSS classes to the form templates to improve styling with Bootstrap 5.

Works with CMS 6, for CMS 4/5 please use the version 1 branch


## Usage

`composer require biffbangpow/silverstripe-bootstrap-5-forms ^2`

Run a `dev/build` and the module should activate automatically on all front-end forms.



Default button styles can be changed via yml config:

```yaml
BiffBangPow\SilverstripeBootstrap5Forms\Bootstrap5Forms:
  submit_button_class: 'btn btn-danger'
  non_submit_button_class: 'btn btn-warning'
```

The module also supports Bootstrap's 'floating labels' functionality.  This can be enabled in config with the following setting:

```yaml
BiffBangPow\SilverstripeBootstrap5Forms\Bootstrap5Forms:
  enable_floating_labels: true
```


Based on ``https://github.com/axllent/silverstripe-bootstrap-forms``
