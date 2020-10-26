# [Double-fault-exception](https://en.m.wikipedia.org/wiki/Double_fault)

 A double fault exception occurs if the processor encounters a problem while trying to service a pending interrupt or exception.
 An example situation when a double fault would occur is:
 * when an **interrupt is triggered but the segment in which the interrupt handler resides is invalid**.
 
 If the processor encounters a problem when calling the double fault handler, a triple fault is generated and the processor shuts down.
