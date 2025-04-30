import type { Express, Request, Response } from "express";
import { createServer, type Server } from "http";
import path from "path";
import { fileURLToPath } from 'url';
import { dirname } from 'path';
import { storage } from "./storage";
import { log } from "./vite";
import express from "express";

// Get __dirname equivalent in ESM
const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

export async function registerRoutes(app: Express): Promise<Server> {
  // Serve static files from the root directory
  app.use(express.static(path.resolve(__dirname, "..")));
  
  // Route for handling appointment form submissions
  app.post('/appointment-submit', (req: Request, res: Response) => {
    const { fullname, email, phone, city, date, message } = req.body;
    
    // Log the form submission (simulating PHP email sending)
    log(`Form submission received from ${fullname || 'unknown'} (${email || 'no email'})`);
    log(`Phone: ${phone}, City: ${city}, Date: ${date}`);
    if (message) log(`Message: ${message}`);
    
    // In a real PHP environment, this would send an email
    // For now, we'll redirect to the thank you page
    res.redirect('/thankyou.html');
  });

  const httpServer = createServer(app);
  return httpServer;
}
