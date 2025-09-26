# Usa una imagen base oficial de Python
FROM python:3.11-slim

# Establece el directorio de trabajo
WORKDIR /app

# Copia el archivo de dependencias
COPY requirements.txt ./

# Instala las dependencias
RUN pip install --no-cache-dir -r requirements.txt

# Copia el resto de la aplicación
COPY . .

# Expón el puerto (ajústalo según tu app, por ejemplo 8000)
EXPOSE 8000

# Comando para ejecutar la aplicación (ajusta si usas Flask, FastAPI, etc)
CMD ["python", "main.py"]
