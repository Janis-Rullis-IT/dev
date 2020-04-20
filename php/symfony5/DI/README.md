# DI / AutoWire

## How are some vendor classes autowired and some not?

- DI list is compiled into `var/cache/dev/App_KernelDevDebugContainer.xml`.
- Find one of vendor's specific class names and search in the vendor directory.
- vendor classes are listed inside packages `../Resources/config/*.xml` files.

### `ManagerRegistry` Example

### Inside the var/cache/dev/App_KernelDevDebugContainer.xml`

```xml
<service id="Doctrine\Persistence\ManagerRegistry" alias="doctrine" public="false"/>
<service id="Doctrine\Common\Persistence\ManagerRegistry" alias="doctrine" public="false"/>
<argument key="Doctrine\Common\Persistence\ManagerRegistry" type="service" id="doctrine" on-invalid="ignore_uninitialized"/>
<argument key="Doctrine\Persistence\ManagerRegistry" type="service" id="doctrine" on-invalid="ignore_uninitialized"/>
```

### Inside the `vendor/doctrine/doctrine-bundle/Resources/config/dbal.xml`

```xml
<service id="Doctrine\Persistence\ManagerRegistry" alias="doctrine" public="false" />
<service id="Doctrine\Common\Persistence\ManagerRegistry" alias="doctrine" public="false" />
```
