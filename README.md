# magickal-mu-plugins

Greetings my name Mikel King

Let me start off by telling you a little about myself. I am currently the Lead Organizer for WordCamp NYC. 

How many of you have seen me talk before whether it's in person or even on WordPress.tv? 

Those that have know that I really dislike the whole Q & A format and it not because I dislike answer questions it because 

 * It frames this as I am the authority on the subject and I believe that there are many different avenues
 * I don't feel like the quality answers are achievable in such a short period
 * I prefer intelligent conversations to volley ball Q & A

Therefore, please save your questions and comments until the end. If I do not get to your question then come find me after this session in the help desk (a.k.a. Happiness Bar).

I work for a company called TMBI, until recently known as Readers Digest Association. When I refer to RD I am mostly focusing on rd.com. That's right I am from NY and I tend to talk fast. I will not be offended if you raise your hand and ask me to slow down just keep in mind that we have a lot of ground to cover and somethings me get bumped if I don't keep it moving.

![Mikel King](/images/mk-sitting-in-helo.jpg)

I have been in technology for well over 20 years and served 11 years in the U.S. Coast Guard in fact this is a photo of me when I was in the military. As you can see a bit has changed most notably I no longer have the ZPM powered helmet.

Contacting me is pretty straight forward: 
 * twitter: @MikelKing
 * GitHub: https://github.com/mikelking
 * LinkedIn: https://www.linkedin.com/in/mikelking
 * x1: mikelking

Today I am going to be talking and demonstrating some of the awesome power of MU plugins. Aspects of this presentation are partially available on GitHub [https://github.com/mikelking/magickal-mu-plugins](https://github.com/mikelking/magickal-mu-plugins). 

In order to get the most out of MU plugins we need to cover a few things. First we need to make some assumptions. 
 * That the majority of you in this room are developers.
 * That you have an understanding about what a MU plugin is.
 * That you have at least dabbled in writing your own plugin.

By a show of hands please 

 * First how many of you actively code in PHP every day?
 * How many practice OOP?
 * How many have heard of codesniffing?
 * How many have heard of unit testing?
 * How many have heard of DRY?
 * How many people have sites that have hundreds even thousands of lines of code in their functions.php file?

Ask yourself Why do you do this? Why are you killing yourself? What do you do when you have to troubleshoot a bug that leads to the hundreds/thousands of lines of code in that one file? 

Put that code in a plugin! Plugins are great because they are modular and you can activate and deactivate them to expedite troubleshooting.

When I first arrived at RD 3 years ago hardly anything was pluginized. The functions.php have 9000 lines of code. The first I did was create a plugin framework that we still use today.

At RD we now have a saying 'If it needs to be on the site then put it in a plugin.'

However, this plugin stub proved to be inefficient as we started to build more plugins. There was too much duplication of code from one plugin implementation to another. This lead me to develop a more efficient framework based on one of the core tenants of OOP inheritance and the DRY principle. For those of you who do not know about DRY it stands for "Don't Repeat Yourself". So I distilled the duplicative code into a library of functions and then contemplated how to make them consistently available to the entire project which of course lead naturally to MU plugins.

Unfortunately there is a conundrum, because like the code in the functions.php MU plugins can not be activated or deactivated at will. The only way to deactivate a MU plugins is to physically remove it from the system. That's a major bummer and kind feels like a step backward.

The solution was simple create building blocks of code 'like legos' that could be stacked together in a logical  way within a standard plugin that can be activated and deactivated at the application layer. So this library of MU plugin code just sits there waiting until it is called upon and then springs into action. The library of code for this is hosted on my public GitHub.

Everything in OOP begins with the class which is the fundamental building bock of any OOP program. So before we delve to deep into that code I want to talk about the core facet of OOP as it pertains to MU plugins and that is inheritance. Without proper inheritance the mu plugin library would be untenable. 

Everything within the braces of a class is a property of that class. In people we would call these traits. So for the sake of this discussion we will take a brief look at some people.





