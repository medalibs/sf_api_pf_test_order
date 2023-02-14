# Symfony 6 app with api-platform 3.0
Entities :
  - User
  - Product
  - Order
  - OrderItem
  
Services :
  - DiscountCalculator
  - InvoiceCalculator
  
Tests:
  - InvoiceCalculatorTest

Postgres server
```
  docker-compose up -d
```

To create database:
```
   bin/console doctrine:database:create
   bin/console doctrine:migrations:diff
   bin/console doctrine:migrations:migrate
```
