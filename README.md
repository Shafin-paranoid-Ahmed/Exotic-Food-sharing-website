# FoodBay — Exotic Food Sharing

A PHP and MySQL coursework prototype for browsing food and viewing a bidding board. The repository combines static food pages, login and signup forms, database-backed PHP pages, and a SQL database export.

## Inside the project

| Path | Purpose |
| --- | --- |
| [ExoFbay/index.html](ExoFbay/index.html) | Home page |
| [ExoFbay/food_list.html](ExoFbay/food_list.html) | Food catalogue |
| [ExoFbay/df](ExoFbay/df/) | Individual food pages and images |
| [ExoFbay/bid_board.php](ExoFbay/bid_board.php) | Database-backed bidding board |
| [ExoFbay/login_signup.html](ExoFbay/login_signup.html) | Account forms |
| [ExoFbay/css](ExoFbay/css/) | Stylesheets |
| [foodbay.sql](foodbay.sql) | Database schema and bundled records |

The database includes tables for users, customers, suppliers, items, bids, carts, ratings, and deliveries. A table's presence does not mean its corresponding website flow is complete.

## Inspect it locally

Use PHP 8 or later with the MySQLi extension, plus a MySQL-compatible database server. The PHP files use named arguments such as `query:`.

1. Create a local database named `foodbay`.
2. Review and import `foodbay.sql` into that database using your database client. It includes records as well as the schema.
3. Update the connection settings in `login.php`, `signup.php`, `bid_board.php`, `button_input.php`, and `live.php` under `ExoFbay/` to match your local database.
4. From the repository root, start a local PHP server:

```bash
php -S 127.0.0.1:8000 -t ExoFbay
```

Open [the local home page](http://127.0.0.1:8000/index.html). Opening the HTML directly from disk will not run the PHP features.

## Current state

The code is an unfinished prototype. In particular:

- Signup defines `$sql1` but executes `$sql`, contains a column/value mismatch, and references a missing `user_id.php`.
- Some navigation points to files that are absent, including `Cart.html`.
- Login interpolates submitted values into SQL and compares passwords directly.
- The bid update has no row-specific `WHERE` clause.

Use a disposable local database with sample information while exploring it. Authentication, query handling, and incomplete flows need work before deployment. The local setup and website flows have not been executed as part of this documentation update.
