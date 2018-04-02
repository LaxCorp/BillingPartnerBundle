Billing partner helper
=======================================================

Install 
-------
composer require laxcorp/billing-partner-bundle

Add in app/AppKernel.php
------------------------
```php
$bundles = [
    new LaxCorp\BillingPartnerBundle\BillingPartnerBundle(),
    new Circle\RestClientBundle\CircleRestClientBundle(),
    new Symfony\Bundle\MonologBundle\MonologBundle(),
]
```

And add in config.yaml

```yaml
billing_partner:
    url: 'https://billing.site:port'
    login: 'billing_api_user'
    password: 'billing_api_password'
```
