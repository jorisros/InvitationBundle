# Invitation bundle
This bundle add invitations for Symfony projects by command or EasyAdmin.

## Usage
Run the following command to add the bundle to your project.
```
composer require jorisros/invitation-bundle
```
To see if the bundle is correctly installed run the following command.
```
php bin/console debug:container jorisros.service.example
```
The result should be look like:
```

Information for Service "jorisros.service.example"
==================================================

 ---------------- --------------------------------------------
  Option           Value
 ---------------- --------------------------------------------
  Service ID       jorisros.service.example
  Class            JorisRos\BoilerPlateBundle\Service\Example
  Tags             -
  Public           yes
  Synthetic        no
  Lazy             no
  Shared           yes
  Abstract         no
  Autowired        no
  Autoconfigured   no
  Usages           none
 ---------------- --------------------------------------------
 ```
 Then the bundle is succesful installed.

## Tests
Run the tests as followed
```
php vendor/bin/phpunit tests
```
