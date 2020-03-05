# Upgrade Guide

## Upgrading from 1.x to 2.x

Most changes made in 2.x release are effects of fixes and clarifications made to the API specification, the rest is related to some minor refactorings and optimisations.

What to look for:
 * removed classes, for example:
    * classes that were never used in data models or operations,
    * classes that made no sense, like empty `SearchQueries`,
    * classes related to CRM functionality,
 * removed methods, for example:
    * it's not possible to change the `ipAddress` of an existing contact, but there was a method for it in `\Getresponse\Sdk\Operation\Model\UpdateContact` class,
    * it's not possible to set contact's `note` when creating it, but there was a method for it in `\Getresponse\Sdk\Operation\Model\NewContact` class,
    * some Operations had methods to set Pagination, Search or Sort params, but don't support them,
 * added classes - SDK now supports more resources, for example:
    * FileLibrary
    * ClickTracks
    * TransactionalEmails management and statistics
    * Newsletter Activities

There are no changes to the client, request or response handling.
