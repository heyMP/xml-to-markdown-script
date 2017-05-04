External Resources 
-------------------

Using the applet found at the [Colorado Physics 2000 website](http://www.colorado.edu/node/11467/2000/applets/orbits.html), place some electrons into orbits around the nucleus. Be careful to push in the right direction. In order to stay in orbit, objects like the moon need a large velocity in a direction perpendicular to the center of attraction.

Systems of Units 
-----------------

Many choices are possible for the three basic units of length, mass and time:

- Metric (SI, Système International) : **meter, kilogram, second**
- English foot, slug , second
- and many others...

We will use SI units in this course, but it is useful to know conversions between systems for making estimates from your everyday knowledge.

Dimensional Analysis 
---------------------

We often want to discuss a physical quantity independently of any particular system of units.   
 Use [M], [L], and [T] in square brackets to represent mass, length, and time regardless of the system.

Basic Quantities

- Length [L]
- Time [T]
- Mass [M]

Derived Quantities

- Velocity \([L]/[T]\)
- Acceleration \([L]/[T]^2\)
- Density \([M]/[L]^3\)
- Energy \([M][L]^2/[T]^2\)

Dimensional Analysis can sometimes provide the solution to a problem with almost no work. For example, lets try to find out the period of a swinging pendulum \(\tau\). By period we mean the time it takes to go back and forth. It must have unit of time. If there is a formula for it, the formula can only depend on the length of the pendulum \(l\), on its mass \(m\) and on gravity \(g\)(what else is there?). You may know or remember (and we will review quickly later on) that gravity on the surface of the Earth is determined by the gravitational acceleration \(g = 9.8 m/s^2\) which has units of length over time squared \([L]/[T]^2\).

Q. Just by making sure that the dimensions are right, which of these formula could be correct for the period of a pendulum (\(\tau\) which should be in seconds)?

1. <a id="a-link">\(\tau \propto \sqrt{\frac{l}{g}}\)</a>A: Indeed this is the right answer! Given that \( g\) has units \([L]/[T]^2\). Answer A gives unit of time for the period.
2. <a id="b-link">\(\tau \propto m \frac{l}{\sqrt{g}}\)</a>B: Not quite the mass has unit of kilogram but nothing else has units of kilogram so the two sides cannot match.
3. <a id="c-link">\(\tau \propto \sqrt{g}\;l\)</a>C: Close but the units on both side don't match
4. <a id="d-link">\(\tau \propto \frac{\sqrt{g}}{m l}\)</a>D: The mass is not cancelled by anything else on the right hand side. You will be left with some units of kilograms.

- S: woah, lots of math again.
- M: I agree with you on this one. This is the max amount of math in this class but this looks more complicated then it is. You are just supposed to figure out the units on the right side of the equation. The sign \(\propto\) means proportional to and this is because dimensional analysis will never give you the exact number for the formula.

Definition 
-----------

How do we define units? Who decide how long 1 meter really is? There used to be a 1 meter bar in France kept as a standard but that was not very precise. Nowadays, we define the second very accurately using atomic clock and then we use the speed of light to define the meter. (We still have a calibrated 1 kg mass that everybody uses as a standard).

Complete the following statement: The standard meter is defined in terms of the speed of light because

1. <a class="clickme" id="a-link">all scientists have access to sunlight.</a>A: True but irrelevant.
2. <a class="clickme" id="b-link">no agreement could be reached on a standard meter stick.</a>B: There was an aggreement but now its more precise.
3. <a class="clickme" id="c-link">the yard is defined in terms of the speed of sound in air.</a>B: There was an aggreement but now its more precise.
4. <a class="clickme" id="d-link">the normal meter is defined with respect to the circumference of the earth.</a>D: nope, just not true
5. <a class="clickme" id="e-link">it is a universal constant.</a>E: Indeed this is the right answer! The speed of light is defined to be   
   \(c = 299\; 792\; 458\; \frac{m}{s}\).   
   This is not an approximation, this is the exact speed of light (there is no decimal). We will often approximate it to be \(3\times 10^8 \; m/s\). So given that everybody on Earth measures the same speed of light, we can all agree on the definition of the meter. We use our atomic clocks to define the second and then in 1 second, light will travel, _by definition_, \(299\; 792\; 458\) meters.