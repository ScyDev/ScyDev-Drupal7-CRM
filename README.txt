
ScyDev Drupal7 CRM
##################

About
-----
This is a very simple CRM tool put together with Drupal7 and some modules.
In fact, it is so simple that it only contains time logging for tasks/customers and automatically creating invoices.

No coding was necessary except for a few lines of PHP to calculate the totals in the Views module. Which means this is just a bundle of Drupal7 and some modules and the actual work is in the configuration in the DB dump.

Created by: Lukas Sägesser, ScyDev GmbH, March 2012, Switzerland

ScyDev Drupal7 CRM is released under the same license as Drupal7, namely the GPL v2, included with this package.



Setup
-----
* Just create a new web in your environment and use the Drupal7 folder contained in this package as its docroot.
* Load the DB dump.



Node types
----------
These should give you an overview of what can be handled with this simple CRM tool.

* Customer
* Work (type of work with separate prices: design, development, etc.)
* Task
* Time (time spent on task)
* Expense
* Invoice



How to use
----------
You should know your way around the Drupal7 backend in order to use this tool.

* Create initial content for the above node types: customers, work types, tasks
* Whenever you work on a task, create a new Time-node where you specify start and end time
	- There is a convenient clone function on the Time-node, so you can just copy and adjust start/end time
* When a task is done, create a new Invoice-node for it
	- You can put more than one task on the same invoice
	- The invoice can be printed directly with Chrome browser
	
	
	
Styling the invoice
-------------------
The invoice node is based on the Panels module. To change it, edit the "Node template" page and rearrange to your hearts content.
* Upload a new image and replace the ScyDev logo on the invoice page.
* Edit the CSS in the bartik template if needed
* Use UI and content translation to adapt to your language
