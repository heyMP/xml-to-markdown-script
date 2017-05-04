<div class="question">Note that we neglect the possible third partial reflection when the second ray exit the glass toward Alice. The number of photon going toward Alice are very small and so we can neglect the rare occasion when one of them get reflected (4% of 4 photons is less than 1 photon).

Now 100 throws is not very much but lets say we could throws forever, an infinite amount of throws, then the probability of hitting region A would be

\lim_{N_{tot} \to \infty}

This probability is defined to be

\(\rm{Prob}(\rm{in}\;\delta x\; \rm{at}\; x) = \frac{N(\rm{in}\;\delta x\; \rm{at}\; x)}{N_{tot}}\)

Q. Let's say you put your hand (with an area of \(0.01\;m^2\)) under a heat lamp with intensity of 10 W/m^2. How much energy would the E&M wave impart on your hand in 10 seconds?

1. [0.1 J](#)**No.** Try again
2. [1 J](#)**Correct.** The intensity times the area gives power \(P = I \times A = 0.1 W\). Power times time gives energy \(Energy = P \times t = 0.1\;W \times 10\;s = 1\; J\).
3. [10 J](#)**No.** Try again
4. [0.01 J](#)**No.** Try again
 
</div>Q. A conducting bar is placed on a set of horizontal rails. A bar magnet is positioned above the rails with its north pole facing the rails, and is then released. While the magnet falls toward the rails, which of the following statements are true.![bar falling through a loop of wire close by a bar](https://online.science.psu.edu/sites/default/files/phys010/W7photon/FaradayA2L.png)

> 1. There is an electric field in the bar.
> 2. There is a current in the bar.
> 3. The bar remains stationary.

1. A only
2. B only
3. C only
4. A and B
5. A and C
6. B and C
7. A, B, and C

<div><div><div><div>### Answer

(4) As the bar magnet falls, the magnetic flux through the circuit will change. This will cause an E field and current in the conducting bar. The conducting bar will also experience a magnetic force due to the current flowing in the bar.

 </div> </div> </div></div>The Double Slit Experiment
--------------------------

Lets return to the double slit experiment. The configuration is as shown below

![double slit experiments details](https://online.science.psu.edu/sites/default/files/phys010/W7photon/500px-Double_slit.svg_.png)

We have two slits a distance d apart. Each act like a point source shining light on a screen far away. For light at an angle \(\theta\), you can see that the light ray coming from the bottom slit has a longer distance to travel (if you are familiar with trigonometry, the extra distance to travel is just \(d\sin\theta\)). For small angles, the extra distance travelled by light from the bottom slits is going to be roughly

\( \rm{shift} = d\theta\)

We will have constructive interference (bright spots) whenever the shift is a integer multiple of the wavelength (in phase) while we have destructive interference whenever the shift is a integer multiple of half the wavelength.

So constructive interference occur for angles equal to

\(\theta_{\rm{bright}} = \frac{n \lambda}{d}\)

for any integer n while dark spots will be found for angles given by

\(\theta_{\rm{dark}} = \frac{n \lambda}{2d}\)

You don't really need to remember these formulas, the goal here was to show how easy one can be quantitative. The important thing to remember is that constructive interference (in phase-bright spots) occur for shift of integer times the wavelength while destructive occur for half integer times wavelength.

Stop to think!

Suppose you toss three coins into the air and let them fall on the floor. Each coin is either a head or a tail. What is the probability of getting two heads and one tail?

1. 20%
2. 1/3
3. 2/3
4. 3/8
5. can't tell

Sometimes we probability, people try to be to fancy. The best way is the brute force way, write down a table of all possibilities.

Here are all possible outcomes

<table border="1" cellpadding="0" cellspacing="0" style="width: 300px;"><tbody><tr><td style="width: 10%;">Tries

 </td> <td style="width: 10%;">Coin 1

 </td> <td style="width: 10%;">Coin 2

 </td> <td style="width: 10%;">Coin 3

 </td> </tr><tr><td style="width: 10%;">1

 </td> <td style="width: 10%;">H

 </td> <td style="width: 10%;">H

 </td> <td style="width: 10%;">H

 </td> </tr><tr><td style="width: 10%;">2

 </td> <td style="width: 10%;">H

 </td> <td style="width: 10%;">H

 </td> <td style="width: 10%;">T

 </td> </tr><tr><td style="width: 10%;">3

 </td> <td style="width: 10%;">H

 </td> <td style="width: 10%;">T

 </td> <td style="width: 10%;">H

 </td> </tr><tr><td style="width: 10%;">4

 </td> <td style="width: 10%;">H

 </td> <td style="width: 10%;">T

 </td> <td style="width: 10%;">T

 </td> </tr><tr><td style="width: 10%;">5

 </td> <td style="width: 10%;">T

 </td> <td style="width: 10%;">H

 </td> <td style="width: 10%;">H

 </td> </tr><tr><td style="width: 10%;">6

 </td> <td style="width: 10%;">T

 </td> <td style="width: 10%;">T

 </td> <td style="width: 10%;">H

 </td> </tr><tr><td style="width: 10%;">7

 </td> <td style="width: 10%;">T

 </td> <td style="width: 10%;">H

 </td> <td style="width: 10%;">T

 </td> </tr><tr><td style="width: 10%;">8

 </td> <td style="width: 10%;">T

 </td> <td style="width: 10%;">T

 </td> <td style="width: 10%;">T

 </td></tr></tbody></table>We got two heads and one tail on tries 2, 3 and 5. This is 3 out of 8, so the probability is 3/8.

What is the probability of getting at least two heads? (Just add the other possibility of HHH so its 4/8 or 50%.)