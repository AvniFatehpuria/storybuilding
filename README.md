# Storybuilding

This is a quick, simple tool for a vaguely RP-ish game my partner and I like to play. We used to use paper & pens but we keep losing our pens, and I wanted to learn a little PHP.

The general idea is that each person controls a character that interacts with situations generated collaboratively. 

The rules are:

One person adds a bunch of nouns (or phrases that can go in the place of nouns, for eg. incredibly deadly viper, rickety wheel, or fashionably attired mongoose) 

The other person adds sentences with holes for those nouns (for eg. The ____ was so, so big, and immediately, our attentions were turned to it). 

Once setup is done, the rounds go like this: 

1. Pull out a random sentence
2. If this is round 1, Person A uses that to start the story, if not, they work it into the existing story. They end on something their character does to address the situation and roll a d6.
3. If Person A rolled a 4 or above, Person B describes what their action succeeding looks like. Else, they describe what goes wrong. Then they describe their own action and roll the die. 
4. Person A describes success/failure for Person B.
5. Next round repeating all these steps, but switching who goes first.

We play to different end conditions. Sometimes we play to whoever laughs first loses, other times we just try to achieve a satisfying ending. It really depends how goofy we're feeling.  

## Getting it running

This project asumes you have a server with PHP support, and a MySQL database 'storybuilding' with two tables, 'nouns' and 'sentences'. Both tables should have one column each named 'entry' of type text. 

I used XAMPP to set up a local HTTP Apache server and MySQL, which was a very straightforward and quick way (but not the only way) to get up and running. If you want to do that, just set up the storybuilding db and move this entire repository to XAMPP/htdocs
