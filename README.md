mailzu
======

ReFork of gnanet's fork of zedzedtop's fork from http://sourceforge.net/projects/mailzu/

MailZu is a simple and intuitive web interface to manage Amavisd-new quarantine. Users can view their own quarantine, release/delete messages or request the release of messages. MailZu is written in PHP and requires Amavisd-new version greater than 2.7.0 


MailZu is a quarantine management interface for amavisd-new
( http://www.ijs.si/software/amavisd/ ).

It provides users and administrators access to email that is suspected to be spam or contain banned contents and gives users the ability to release, request, or delete these messages from their quarantine.

Users can access their personal quarantine by authenticating to various pre-existent backends such as LDAP ( or Active Directory ) or any PHP PEAR supported database.

This fork already includes changes that enable displaying utf8 content, releasing spam from localhost, German language, full database schema for MySQL 5.6 with InnoDB storage, and amavisd-new 2.7.0

This fork is compatible with PHP 5 and 7, tested with PHP 7.2

*Planned changes are: cleanup code, removing obsolete content, and scripts; replacing HTML tables with CSS tables; creating mobile view using CSS media queries; updated database cleanup script; script that sends daily report about quarantined items to users; step-by-step installation guid for a common postfix-dovecot-amavis-spamassassin setup*

See the INSTALL file in the docs/ directory included with this distribution.
