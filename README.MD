# Silverstripe Bootstrap 5 Forms

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
