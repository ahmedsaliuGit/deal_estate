# RBAC Design

## Purpose

Implement Role-Based Access Control (RBAC) for the Property Management System.

---

## Roles

| Role             | Description                                         |
| ---------------- | --------------------------------------------------- |
| Super Admin      | Full access to the entire system                    |
| Property Manager | Manages properties, units, tenants, and maintenance |
| Accountant       | Manages payments and financial reports              |
| Staff            | Handles operational tasks with limited permissions  |
| Tenant           | Access to personal information only                 |

---

## Permissions

### Users

* users.view
* users.create
* users.edit
* users.delete

### Properties

* properties.view
* properties.create
* properties.edit
* properties.delete

### Units

* units.view
* units.create
* units.edit
* units.delete

### Tenants

* tenants.view
* tenants.create
* tenants.edit
* tenants.delete

### Payments

* payments.view
* payments.create
* payments.edit
* payments.delete

### Reports

* reports.view

### Maintenance

* maintenance.view
* maintenance.create
* maintenance.edit
* maintenance.delete

---

## Role Permission Matrix

| Permission         | Super Admin | Manager | Accountant | Staff   | Tenant |
| ------------------ | ----------- | ------- | ---------- | ------- | ------ |
| properties.view    | ✅          | ✅     | ❌        | ❌      | ❌     |
| properties.create  | ✅          | ✅     | ❌        | ❌      | ❌     |
| tenants.view       | ✅          | ✅     | ❌        | Limited  | ❌     |
| payments.view      | ✅          | ❌     | ✅        | ❌      | ❌     |
| reports.view       | ✅          | ✅     | ✅        | ❌      | ❌     |
| maintenance.create | ✅          | ✅     | ❌        | ✅      | ✅     |

---

## Database Tables

* users
* roles
* permissions
* role_user
* permission_role

---

## Relationships

User

* belongsToMany(Role)

Role

* belongsToMany(User)
* belongsToMany(Permission)

Permission

* belongsToMany(Role)

---

## Middleware

* role:super-admin
* permission:properties.create
* permission:payments.view

---

## Architecture

User
 ↓
Role
 ↓
Permission
 ↓
Middleware
 ↓
Controller
 ↓
Page/API

---

## Business Rules

1. Every user must have at least one role.
2. A user may have multiple roles.
3. Super Admin bypasses all permission checks.
4. Removing a role immediately revokes its permissions.
5. Frontend and backend must both enforce permissions.

---

## Future Enhancements

* Team-based permissions
* Property-specific permissions
* Activity audit logs
* Permission caching
