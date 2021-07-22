ALTER TABLE `actededeces`
   ADD is_paid BOOLEAN DEFAULT FALSE;
ALTER TABLE `actedemariage`
ADD is_paid BOOLEAN DEFAULT FALSE;
ALTER TABLE `actedenaissance`
ADD is_paid BOOLEAN DEFAULT FALSE;

ALTER TABLE `casierjudiciaire`
ADD is_paid BOOLEAN DEFAULT FALSE;