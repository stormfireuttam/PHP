# Database Schema

<img src="https://d2slcw3kip6qmk.cloudfront.net/marketing/pages/chart/seo/database/discovery/logical-physical-schema.svg" width="50%"/>
A database schema is the skeleton structure that represents the logical view of the entire database. It defines how the data is organized and how the relations among them are associated. It formulates all the constraints that are to be applied on the data.

A database schema defines its entities and the relationship among them. It contains a descriptive detail of the database, which can be depicted by means of schema diagrams. It’s the database designers who design the schema to help programmers understand the database and make it useful.


A database schema can be divided broadly into two categories −

- **Physical Database Schema** − This schema pertains to the actual storage of data and its form of storage like files, indices, etc. A physical database schema lays out how data is stored physically on a storage system in terms of files and indices. It defines how the data will be stored in a secondary storage.

- **Logical Database Schema** − This schema defines all the logical constraints that need to be applied on the data stored. It defines tables, views, and integrity constraints.

### Database Instance
It is important that we distinguish these two terms individually. Database schema is the skeleton of database. It is designed when the database doesn't exist at all. Once the database is operational, it is very difficult to make any changes to it. A database schema does not contain any data or information.

A database instance is a state of operational database with data at any given time. It contains a snapshot of the database. Database instances tend to change with time. A DBMS ensures that its every instance (state) is in a valid state, by diligently following all the validations, constraints, and conditions that the database designers have imposed.

# Indexing in Database

[Indexing in Database](https://chartio.com/learn/databases/how-does-indexing-work/#how-does-the-database-know-what-other-fields-in-the-table-to-return)

# Joins in Database

[Joins in DB](https://www.geeksforgeeks.org/sql-join-set-1-inner-left-right-and-full-joins/)
