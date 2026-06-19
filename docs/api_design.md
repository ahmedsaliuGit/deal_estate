# API Design

## API Overview

The backend will expose a RESTful API that allows authenticated users to manage properties, units, tenants, payments, leases, and maintenance requests.

### Base URL
```http
/api/v1
```

### Authentication
Laravel Sanctum will be used authentication

Authenticated request must include:
```http
    Authorization: Bearer {token}
```

### Authentication Endpoint

#### Login
```http
    POST /api/v1/login
```
Request

```JSON
    {
        "email": "manager@example.com",
        "password": "password"
    }
```

Response

```JSON
    {
        "token": "xxx",
        "user": {
            "id": 1,
            "name": "Ahmed",
            "role": "manager"
        }
    }
```

#### Logout
```http
    POST /api/v1/logout
```

### Property endpoint

#### Get all properties
```http
    Get /api/v1/properties
```

Response

```JSON
    [
        {
            "id": 1,
            "name": "Sunshine Estate",
            "address": "Abuja"
        }
    ]
```

#### Create property
```http
    Post /api/v1/properties
```

```JSON
    {
        "id": 1,
        "name": "Sunshine Estate",
        "address": "Abuja"
    }
```

#### Get single property
```http
    Get /api/v1/properties/{id}
```

Response

```JSON
    {
        "id": 1,
        "name": "Sunshine Estate",
        "address": "Abuja"
    }
```

#### Delete property
```http
    Delete /api/v1/properties/{id}
```

### Unit endpoint

#### Get all units
```http
    Get /api/v1/units
```

Response

```JSON
    [
        {
            "id": 1,
            "unit_number": "A1",
            "status": "Vacant"
        },
        {
            "id": 2,
            "unit_number": "A2",
            "status": "Occupied"
        }
    ]
```

#### Get single unit
```http
    Get /api/v1/units/{id}
```

Response

```JSON
    {
        "id": 1,
        "unit_number": "A1",
        "status": "Vacant"
    }
```

#### Create unit
```http
    Post /api/v1/units/
```

Response

```JSON
    {
        "id": 1,
        "unit_number": "A1",
        "status": "Vacant"
    }
```

### Tenant endpoint

#### Get all tenants
```http
    Get /api/v1/tenants
```

Response

```JSON
    [
        {
            "id": 1,
            "user_id": "1",
            "phone": "08038918190"
        },
        {
            "id": 2,
            "user_id": "2",
            "phone": "07033918190"
        }
    ]
```

#### Get single tenant
```http
    Get /api/v1/tenants/{id}
```

Response

```JSON
    {
        "id": 1,
        "user_id": "1",
        "phone": "08038918190"
    }
```

#### Update single tenant
```http
    Put /api/v1/tenants/{id}
```

Response

```JSON
    {
        "id": 1,
        "user_id": "1",
        "phone": "08038918190"
    }
```

#### Delete single tenant
```http
    Delete /api/v1/tenants/{id}
```

#### Assign tenant to Unit
```http
    Patch /api/v1/units/{id}/assign-tenant
```

Request

```JSON
    {
        "tenant_id": 1,
    }
```

### Payment endpoint

#### Get all payments
```http
    Get /api/v1/payments
```

#### Record payments
```http
    Post /api/v1/payments
```

Request

```JSON
    {
        "tenant_id": 1,
        "amount": 200000,
        "payment_method": "bank_transfer"
    }
```

#### Payment history for tenant
```http
    GET /api/v1/tenants/{id}/payments
```

### Maintenance endpoint

#### List maintenance request
```http
    Get /api/v1/maintenance-request
```

#### Create maintenance request
```http
    Post /api/v1/maintenance-request
```

Request

```JSON
    {
        "unit_id": 2,
        "title": "Leaking Pipe",
        "description": "Kitchen sink is leaking"
    }
```

#### Update maintenance status
```http
    Patch /api/v1/maintenance-request/{id}/status
```

Request

```JSON
    {
        "status": "In progress",
    }
```

### Dashboard endpoint

The endpoint provide aggregate data for the dashboard widgets

#### Dashboard statistics
```http
    Get /api/v1/dashboard/stats
```

Response

```JSON
    {
        "total_properties": 12,
        "total_units": 85,
        "occupied_units": 72,
        "vacant_units": 13,
        "monthly_revenue": 12500000
    }
```

### Error response format

All API errors should follow consistent format

```JSON
    {
        "message": "Validation failed",
        "errors": {
            "name": [
                "The name field is required."
            ]
        }
    }
```

### Future API Enhancement
- File upload for lease documents
- Notification endpoints
- Activity log endpoints
- CSV/PDF export endpoints
- Email reminder endpoints

### API Resources Map
Properties
├── Units
│   ├── Tenants
│   │   ├── Leases
│   │   └── Payments
│   └── Maintenance Requests