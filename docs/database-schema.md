# Main Entities

1. User
2. Property
3. Lease
4. Tenant
5. Unit
6. Payment
7. MaintenanceRequest

Property
   |
   | has many
   |
Units
   |
   | belongs to
   |
Tenant
   |
   | has one
   |
Lease

Tenant
   |
   | has many
   |
Payments

## users
```sql
id
name
email
password
role
created_at
updated_at
```

## properties
```sql
id
name
address
property_type
description
created_at
updated_at
```

## units
```sql
id
property_id
unit_number
rent_amount
status
created_at
updated_at
```

## tenants
```sql
id
user_id
phone
emergency_contact
created_at
updated_at
```

## leases
```sql
id
tenant_id
unit_id
start_date
end_date
deposit
status
created_at
updated_at
```

## payments
```sql
id
tenant_id
amount
payment_date
payment_method
status
created_at
updated_at
```

## maintenance_requests
```sql
id
tenant_id
unit_id
title
description
status
created_at
updated_at
```

## Design

Users

| Field    | Type    |
| -------- | ------- |
| id       | bigint  |
| name     | varchar |
| email    | varchar |
| password | varchar |
| role     | enum    |

Properties

| Field         | Type    |
| ------------- | ------- |
| id            | bigint  |
| name          | varchar |
| address       | text    |
| property_type | varchar |

Units

| Field       | Type        |
| ----------- | ----------- |
| id          | bigint      |
| property_id | foreign key |
| unit_number | varchar     |
| rent_amount | decimal     |

Tenants

| Field             | Type        |
| ----------------- | ----------- |
| id                | bigint      |
| user_id           | foreign key |
| phone             | varchar     |
| emergency_contact | varchar     |

Leases

| Field           | Type          |
| --------------- | ------------- |
| id              | bigint        |
| tenant_id       | foreign key   |
| unit_id         | foreign key   |
| start_date      | Date          |
| end_date        | Date          |
| deposit         | varchar       |
| status          | varchar       |

Payment

| Field           | Type        |
| --------------- | ----------- |
| id              | bigint      |
| tenant_id       | foreign key |
| amount          | varchar     |
| payment_date    | Date        |
| payment_method  | varchar     |
| status          | varchar     |

Maintenance Request

| Field         | Type          |
| ------------- | ------------- |
| id            | bigint        |
| tenant_id     | foreign key   |
| unit_id       | foreign key   |
| title         | varchar       |
| description   | varchar       |
| status        | varchar       |