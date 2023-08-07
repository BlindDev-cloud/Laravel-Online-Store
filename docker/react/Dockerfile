FROM node:18.17.0

# Set up working directory
WORKDIR /app

# Copy dependences to the container
COPY ./react/package*.json .

# Install dependences
RUN npm install

# Copy project to the container
COPY ./react .

# Expose the port
EXPOSE 5173

# Run vite server
CMD ["npm", "run", "dev"]
