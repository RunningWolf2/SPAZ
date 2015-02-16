#Lokale Entwicklung#

Hier wird beschrieben, wie deine lokale Entwicklungsumgebung aussehen sollte.


##Anforderungen##

Es muss folgendes installiert sein:

1. [Git](http://git-scm.com/)
1. [VirtualBox](https://www.virtualbox.org/)
1. [Vagrant](https://www.vagrantup.com/)
1. [Homestead](http://laravel.com/docs/5.0/homestead)
1. [GitHub Client](https://windows.github.com/) (empfohlen)

##Infos##

###Git###
Git ist eine freie Software zur verteilten Versionsverwaltung von Dateien.
[Downloade](http://git-scm.com/downloads) und installiere Git. Git sollte über das CLI erreichbar sein.

###VirtualBox###
VirtualBox dient zur Virtualisierung von Betriebssytemen.

###Vargant###
Vagrant ist eine Anwendung zum Erstellen und Verwalten von virtuellen Maschinen. Es insbesondere für die Webentwicklung von Vorteil, da sich damit ganze Entwicklungsumgebungen mit z.B. PHP, MySQL, etc. installieren und zurücksetzen lassen.

###Homestead###
Homestead bringt eine Vagrant box mit sich die viel Software vorinstalliert hat (siehe [hier](http://laravel.com/docs/5.0/homestead)).


##Installation##
Folge den Installationsanweisungen auf den jeweiligen Webseiten.
Um Vagrant zu installieren, solltest du einen SSH Key haben.
Siehe [hier](http://kb.siteground.com/how_to_generate_an_ssh_key_on_windows_using_putty/) oder [hier](http://www.cyberciti.biz/faq/how-to-set-up-ssh-keys-on-linux-unix/).


###Abhängigkeiten herunterladen###
Die Webanwendung nutzt u.A. Laravel. Diese Abhängigkeiten müssen erst heruntergeladen werden.

Führe folgende Befehle aus:

```sh
composer install
npm install
bower install
```